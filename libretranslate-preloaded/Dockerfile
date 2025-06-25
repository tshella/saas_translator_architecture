FROM libretranslate/libretranslate:v1.6.5

WORKDIR /app

# Install Argos Translate CLI (if not already)
RUN pip install --upgrade pip && pip install argostranslate

# Download specific language models
RUN argos-translate-cli --download-model en fr && \
    argos-translate-cli --download-model fr en && \
    argos-translate-cli --download-model en es && \
    argos-translate-cli --download-model es en

# Optional: list installed models
RUN argos-translate-cli --list-installed

# Health check utility (curl)
RUN apt-get update && apt-get install -y curl && apt-get clean
