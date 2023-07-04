from brownie import accounts, LogiCoin
import time
def main():
    account = accounts[0]
    contract_address = LogiCoin.deploy({'from':account})
    time.sleep(1)
