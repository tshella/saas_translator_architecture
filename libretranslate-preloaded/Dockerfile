FROM libretranslate/libretranslate:v1.6.5

# Switch to root for package install
USER root

# Set working directory
WORKDIR /app

# Install required packages
RUN apt-get update && \
    apt-get install -y git curl && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Upgrade pip and install Argos Translate with CLI from GitHub
RUN pip install --upgrade pip && \
    pip install git+https://github.com/argosopentech/argos-translate.git

# Download language models (change these if needed)
RUN python3 -m argostranslate.package \
    --download-install https://www.argosopentech.com/argospm/en_fr.argospackage && \
    python3 -m argostranslate.package \
    --download-install https://www.argosopentech.com/argospm/fr_en.argospackage && \
    python3 -m argostranslate.package \
    --download-install https://www.argosopentech.com/argospm/en_es.argospackage && \
    python3 -m argostranslate.package \
    --download-install https://www.argosopentech.com/argospm/es_en.argospackage

# Optional: run a test
RUN python3 -m argostranslate.translate --from-lang en --to-lang fr --text "Hello"

# Switch back to libretranslate user
USER libretranslate
