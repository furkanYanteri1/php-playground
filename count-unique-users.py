import csv

# Set to store unique user identifiers
unique_users = set()

# Open the log file
with open('sorted_applicants_test.log', 'r') as file:
    # Create a CSV reader
    reader = csv.reader(file)
    
    # Process each line in the file
    for row in reader:
        if len(row) >= 3:  # Ensure there are at least 3 columns
            # Extract IP address and user-agent string
            ip_address = row[2].strip('[]"')
            user_agent = row[1].strip('[]"')
            
            # Create a unique identifier by combining IP and user-agent
            unique_identifier = f"{ip_address}-{user_agent}"
            
            # Add the identifier to the set
            unique_users.add(unique_identifier)

# Print the number of unique users
print(f'Unique Users: {len(unique_users)}')