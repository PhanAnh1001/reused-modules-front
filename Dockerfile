FROM node:18-alpine
WORKDIR /app
# Install dependencies based on the preferred package manager
COPY ./package.json ./pnpm-lock.yaml ./
RUN yarn global add pnpm && pnpm i

EXPOSE 3000
ENV PORT 3000
