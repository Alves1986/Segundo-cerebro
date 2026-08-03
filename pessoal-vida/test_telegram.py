import asyncio
import os
import time

os.environ['HERMES_HOME'] = '/home/ubuntu/.hermes'

# Read token from .env
token = None
with open('/home/ubuntu/.hermes/.env') as f:
    for line in f:
        if 'TELEGRAM_BOT_TOKEN' in line and not line.strip().startswith('#'):
            token = line.strip().split('=', 1)[1]
            break

if not token:
    print("No token found")
    exit(1)

print(f"Token: {token[:20]}...")

# Test 1: urllib
import urllib.request
import json

start = time.time()
try:
    req = urllib.request.Request(f'https://api.telegram.org/bot{token}/getMe')
    with urllib.request.urlopen(req, timeout=10) as resp:
        data = json.loads(resp.read())
        print(f"urllib test: {time.time()-start:.2f}s OK - {data.get('result', {}).get('first_name', 'unknown')}")
except Exception as e:
    print(f"urllib test: {time.time()-start:.2f}s FAILED - {e}")

# Test 2: python-telegram-bot
start = time.time()
try:
    from telegram import Bot
    async def test():
        bot = Bot(token=token)
        info = await bot.get_me()
        return f"Bot: {info.first_name} (@{info.username})"
    result = asyncio.run(test())
    print(f"python-telegram-bot test: {time.time()-start:.2f}s OK - {result}")
except Exception as e:
    print(f"python-telegram-bot test: {time.time()-start:.2f}s FAILED - {type(e).__name__}: {e}")

# Test 3: asyncio + aiohttp (what Hermes adapter likely uses)
start = time.time()
try:
    import aiohttp
    async def test_aiohttp():
        async with aiohttp.ClientSession() as session:
            async with session.get(f'https://api.telegram.org/bot{token}/getMe', timeout=aiohttp.ClientTimeout(total=10)) as resp:
                data = await resp.json()
                return data
    data = asyncio.run(test_aiohttp())
    print(f"aiohttp test: {time.time()-start:.2f}s OK - {data}")
except Exception as e:
    print(f"aiohttp test: {time.time()-start:.2f}s FAILED - {type(e).__name__}: {e}")