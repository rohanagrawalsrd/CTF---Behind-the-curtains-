
# CTF – Behind the Curtains (LFI)

This is a medium-difficulty Local File Inclusion (LFI) CTF challenge.

## Scenario
A shopping website (Navkar Hive) uses a vulnerable PHP page loader.

## Objective
Players must:
1. Identify the LFI vulnerability in the `page` parameter
2. Use `php://filter` to leak source code
3. Decode the base64 output
4. Use directory traversal to retrieve the hidden flag

## Run Instructions

### Requirements
- Docker
- Docker Compose

### Steps
```bash
git clone <REPO_LINK>
cd lfi-medium
docker compose up --build

