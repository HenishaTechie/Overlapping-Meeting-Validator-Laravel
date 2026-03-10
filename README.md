
# Overlapping-Meeting-Validator-Laravel-
problem statement

# Project Structure

app->Http/Controllers->api->MeetingController.php

app-> Services-> MeetingService.php

routes -> api.php

# How to Run the Project

Clone the repository

git clone https://github.com/HenishaTechie/Overlapping-Meeting-Validator-Laravel

Install dependencies

composer install

# Testing APIs

Use Postman or any API client.

# Get All Meetings

curl --location 'localhost/meeting_booking/api/meetings'

# Schedule New Meeting

curl --location 'localhost/meeting_booking/api/check-meeting' \
--header 'Content-Type: application/json' \
--data '{
    "start":"11:00",
    "end":"10:00"
}'

