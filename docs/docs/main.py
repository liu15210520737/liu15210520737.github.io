# main.py

def define_env(env):
    """
    Define environment and macros for MkDocs.
    """

    @env.macro
    def my_macro():
        return "Hello, MkDocs!"
    
    # 你可以在这里定义更多的宏或变量
