#!/bin/bash

echo "=== ShopFast Local Deployment ==="

# Build the image
echo "1. Building Docker image..."
docker-compose build

# Stop existing containers
echo "2. Stopping existing containers..."
docker-compose down

# Start new deployment
echo "3. Starting new deployment..."
docker-compose up -d

# Wait for services to be ready
echo "4. Waiting for services to be ready..."
sleep 30

# Health check
echo "5. Performing health check..."
HTTP_STATUS=$(curl -s -o /dev/null -w "%{http_code}" http://localhost:8080)

if [ "$HTTP_STATUS" -eq 200 ]; then
    echo "✅ Deployment successful! Application is running on http://localhost:8080"
else
    echo "❌ Deployment failed! HTTP Status: $HTTP_STATUS"
    echo "Checking logs..."
    docker-compose logs app
    exit 1
fi

echo "6. Deployment complete!"
