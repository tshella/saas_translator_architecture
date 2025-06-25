from flask import Flask, request, jsonify
from transformers import AutoModelForSeq2SeqLM, AutoTokenizer, pipeline

app = Flask(__name__)

print("🔄 Loading model...")
model = AutoModelForSeq2SeqLM.from_pretrained("facebook/nllb-200-distilled-600M")
tokenizer = AutoTokenizer.from_pretrained("facebook/nllb-200-distilled-600M")
translator = pipeline("translation", model=model, tokenizer=tokenizer)

@app.route("/translate", methods=["POST"])
def translate():
    data = request.get_json()
    src_lang = data.get("source", "eng_Latn")
    tgt_lang = data.get("target", "fra_Latn")
    text = data.get("text", "")

    inputs = tokenizer(text, return_tensors="pt")
    translated_tokens = model.generate(
        **inputs,
        forced_bos_token_id=tokenizer.lang_code_to_id[tgt_lang]
    )
    result = tokenizer.batch_decode(translated_tokens, skip_special_tokens=True)
    return jsonify({"translation": result[0]})
