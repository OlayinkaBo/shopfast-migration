# ShopFast E-commerce Platform Migration

## Project Overview
Migration of ShopFast PHP application from traditional hosting to containerized Kubernetes platform.

## Current Status
✅ Basic application containerized with Docker
✅ Local development environment with Docker Compose
✅ CI/CD pipeline setup with GitHub Actions
✅ Basic health checks and monitoring

## Quick Start

### Prerequisites
- Docker & Docker Compose
- Git

### Local Development
1. Clone the repository:
   \`\`\`bash
   git clone https://github.com/your-username/shopfast-migration.git
   cd shopfast-migration
   \`\`\`

2. Start the application:
   \`\`\`bash
   ./deploy-local.sh
   \`\`\`

3. Access the application:
   - Web: http://localhost:8080
   - Database: localhost:3306 (root/password)

### Project Structure
- \`src/\` - PHP application source code
- \`docker/\` - Docker configuration files
- \`k8s/\` - Kubernetes manifests (future)
- \`terraform/\` - Infrastructure as Code (future)
- \`.github/workflows/\` - CI/CD pipelines

## Next Steps
- [ ] Set up Kubernetes cluster
- [ ] Create Kubernetes manifests
- [ ] Implement Terraform for infrastructure
- [ ] Add monitoring with Prometheus/Grafana
- [ ] Implement production deployment strategy
