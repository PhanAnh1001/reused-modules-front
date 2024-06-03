FROM node:18-alpine
WORKDIR /app/reused-modules-front
# Install dependencies based on the preferred package manager
COPY reused-modules-front/package.json reused-modules-front/pnpm-lock.yaml ./
RUN yarn global add pnpm && pnpm i

EXPOSE 3000
ENV PORT 3000
