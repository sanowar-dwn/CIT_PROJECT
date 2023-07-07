from brownie import accounts, LogiCoin, config
import time

def main():
    account = accounts.add(config['wallets']['from_key'])
    contract_address = LogiCoin.deploy({'from':account}, publish_source=True)
    time.sleep(1) # This line is used to avoid the Web3 package bug
