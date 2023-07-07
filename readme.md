# ERC-20 Token Contract Documentation

The ERC-20 Token contract implements the ERC-20 standard for fungible tokens on the Ethereum blockchain.

Token Address: 0xF098E992C4D51E6937CC66E10ca9d7509cc537Aa

Deployed on: Sepolia Test Net
## Contract Overview

- Contract Name: LogiCoin
- Solidity Version: >=0.7.0 <0.9.0
- License: GPL-3.0

## Public State Variables

### name

- **Type**: string

The name of the token.

### symbol

- **Type**: string

The symbol or ticker of the token.

### totalSupply

- **Type**: uint256

The total supply of tokens in circulation.

### decimals

- **Type**: uint8

The number of decimal places the token uses for display purposes.

### balances

- **Type**: mapping(address => uint256)

A mapping that stores the token balances for each address.

### allowances

- **Type**: mapping(address => mapping(address => uint256))

A nested mapping that stores the token allowances granted by one address to another.

## Events

### Transfer

- **Parameters**:
  - `_from` (address): The address from which tokens are transferred.
  - `_to` (address): The address to which tokens are transferred.
  - `_value` (uint256): The amount of tokens being transferred.

An event emitted when tokens are transferred from one address to another.

### Approval

- **Parameters**:
  - `_owner` (address): The address granting the allowance.
  - `_spender` (address): The address being granted the allowance.
  - `_value` (uint256): The amount of tokens being granted as allowance.

An event emitted when an allowance is granted by one address to another.

## Public Functions

### constructor

- **Parameters**:
  - `_name` (string): The name of the token.
  - `_symbol` (string): The symbol or ticker of the token.
  - `_initialSupply` (uint256): The initial supply of tokens.
  - `_decimals` (uint8): The number of decimal places for token display.

The constructor function that initializes the token with the provided name, symbol, initial supply, and decimal places.

### totalSupply

- **Returns**: uint256

Returns the total supply of tokens in circulation.

### balanceOf

- **Parameters**:
  - `_owner` (address): The address for which the balance is queried.
- **Returns**: uint256

Returns the token balance of a specific address.

### transfer

- **Parameters**:
  - `_to` (address): The address to which tokens are transferred.
  - `_value` (uint256): The amount of tokens to transfer.
- **Returns**: bool

Transfers a specified amount of tokens from the caller's address to the recipient address.

### transferFrom

- **Parameters**:
  - `_from` (address): The address from which tokens are transferred.
  - `_to` (address): The address to which tokens are transferred.
  - `_value` (uint256): The amount of tokens to transfer.
- **Returns**: bool

Transfers a specified amount of tokens from one address to another, on behalf of a third party who has granted an allowance.

### approve

- **Parameters**:
  - `_spender` (address): The address being granted the allowance.
  - `_value` (uint256): The amount of tokens to grant as allowance.
- **Returns**: bool

Allows a spender to spend a specified amount of tokens on behalf of the owner.

### allowance

- **Parameters**:
  - `_owner` (address): The address granting the allowance.
  - `_spender` (address): The address being granted the allowance.
- **Returns**: uint256

Returns the amount of tokens that a spender is allowed to spend on behalf of an owner.

## ERC-20 Standard Compliance

The ERC-20 Token contract fully complies with the ERC-20 standard interface, providing all the required functions and events defined by the standard.
