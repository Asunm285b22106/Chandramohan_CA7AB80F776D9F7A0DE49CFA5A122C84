class BankAccount:
    def __init__(self, account_number, account_holder_name, initial_balance):
        self.__account_number = account_number
        self.__account_holder_name = account_holder_name
        self.__account_balance = initial_balance

    def deposit(self, amount):
        if amount > 0:
            self.__account_balance += amount
            return True
        else:
            return False

    def withdraw(self, amount):
        if 0 < amount <= self.__account_balance:
            self.__account_balance -= amount
            return True
        else:
            return False

    def display_balance(self):
        return f"Account Number: {self.__account_number}, Holder: {self.__account_holder_name}, Balance: {self.__account_balance}"
account = BankAccount("123456789", "John Doe", 1000)
print(account.display_balance())
account.deposit(500)
print(account.display_balance())
account.withdraw(200)
print(account.display_balance())