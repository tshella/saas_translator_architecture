FROM python:3.10-slim

WORKDIR /app
COPY requirements.txt ./
RUN pip install --upgrade pip && pip install -r requirements.txt

# Preload model
RUN python -c "from transformers import AutoModelForSeq2SeqLM, AutoTokenizer; \
AutoModelForSeq2SeqLM.from_pretrained('facebook/nllb-200-distilled-600M'); \
AutoTokenizer.from_pretrained('facebook/nllb-200-distilled-600M')"

COPY app.py .

EXPOSE 5001
CMD ["python", "app.py"]
