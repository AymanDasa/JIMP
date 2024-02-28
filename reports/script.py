# script.py
import sys

# Get command-line arguments
args = sys.argv[1:]

# Check if arguments are provided
if args:
    for arg in args:
        print(f"Received argument from PHP: {arg}")
else:
    print("No arguments provided from PHP.")
