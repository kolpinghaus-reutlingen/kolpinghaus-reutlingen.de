# Source Code for kolpinghaus-reutlingen.de

This is the source code repository for the [Kolpinghaus Reutlingen](http://kolpinghaus-reutlingen.de) website.
This project is built using [Jekyll](https://jekyllrb.com/).

## Development Setup

### Prerequisites

- Ruby (version 2.7.0 or newer)
- Bundler

### Installation


To install the project, follow these steps:

1. Install Bundler if you haven't already:

   ```bash
   sudo apt-get install -y bundler
   ```

2. Install the project dependencies:

   ```bash
   bundler install
   ```

### Usage

To run the project locally, use one of the following commands:

```bash
bundle exec jekyll serve
```

or

```bash
jekyll serve
```

### Image Optimization

Before uploading images, use the following command to reduce their size:

```bash
jpegoptim *.JPG -S 9600
```

### Docker Link Checker

To check the links in your project, you can use the Docker Link Checker. Run the following command:

```bash
docker run --rm -it ghcr.io/linkchecker/linkchecker:latest --verbose https://kolpinghaus-reutlingen.de/
```

### Bulk Image Downloader

For downloading images in bulk, you can use the Cloudinary Bulk Image Downloader. More information can be found at the following link:

[Cloudinary Bulk Image Downloader](https://github.com/krivachy/cloudinary-bulk-image-downloader)

