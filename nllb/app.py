from flask import Flask, request, jsonify
from transformers import AutoModelForSeq2SeqLM, AutoTokenizer, pipeline

app = Flask(__name__)
model_name = "facebook/nllb-200-distilled-600M"

print("🔄 Loading model...")
model = AutoModelForSeq2SeqLM.from_pretrained(model_name)
tokenizer = AutoTokenizer.from_pretrained(model_name)
translator = pipeline("translation", model=model, tokenizer=tokenizer)

@app.route("/translate", methods=["POST"])
def translate():
    data = request.get_json()
    src = data.get("source", "eng_Latn")
    tgt = data.get("target", "fra_Latn")
    text = data.get("text", "")

    inputs = tokenizer(text, return_tensors="pt")
    translated = model.generate(
        **inputs,
        forced_bos_token_id=tokenizer.lang_code_to_id[tgt]
    )
    result = tokenizer.batch_decode(translated, skip_special_tokens=True)
    return jsonify({"translation": result[0]})
