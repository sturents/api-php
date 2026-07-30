#!/bin/bash

deploy_doc() {
    local yml_file=$1
    local html_file=$2
    local version major
    version=$(grep -A 10 '^info:' "$yml_file" | grep '^\s*version:' | head -1 | awk '{print $2}')
    major=$(echo "$version" | cut -d'.' -f1)

    npx @redocly/cli@1 build-docs "$yml_file"
    aws s3 cp redoc-static.html "s3://api-spec.sturents.com/v${major}/${html_file}"
    # Put the latest version here
    if [ "$version" = "3.0.0" ]; then
        aws s3 cp redoc-static.html "s3://api-spec.sturents.com/${html_file}"
    fi
}

# old combined one
deploy_doc swagger/api.yml index.html

# new segregated ones
deploy_doc swagger/api-display.yml display.html
deploy_doc swagger/api-channel.yml channel.html
deploy_doc swagger/api-upload.yml upload.html

latest_commit=$(git rev-parse HEAD)
aws cloudfront create-invalidation --distribution-id E2BJSIU2NO6GX2 --invalidation-batch "{\"Paths\":{\"Quantity\":1,\"Items\":[\"/*.html\"]},\"CallerReference\":\"api-rebuild-$latest_commit\"}"
