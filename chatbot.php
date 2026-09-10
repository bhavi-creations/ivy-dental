<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivy Dental Clinic Chatbot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* Chatbot Icon Styling */
        #chatbot-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            cursor: pointer;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #0b6c5e;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s;
        }

        #chatbot-icon:hover {
            transform: scale(1.05);
        }

        /* Chat Window Styling */
        #chatbot-window {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 350px;
            height: 450px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
            flex-direction: column;
            overflow: hidden;
            border: 1px solid #0b6c5e;
        }

        /* Chat Header */
        #chat-header {
            background-color: #0b6c5e;
            color: white;
            padding: 10px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Chat Body */
        #chat-body {
            flex-grow: 1;
            padding: 15px;
            overflow-y: auto;
            background-color: #ffffff;
        }

        /* Message Styling */
        .user-msg {
            text-align: right;
        }

        .bot-msg {
            text-align: left;
        }

        .message-bubble {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 15px;
            margin-bottom: 8px;
            max-width: 90%;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .bot-bubble {
            background-color: #eeeeee;
            border: 1px solid #cccccc;
            color: #333;
        }

        .user-msg .message-bubble {
            background-color: #003b32;
            color: white;
        }

        /* Service Buttons */
        .service-btn {
            width: 100%;
            margin-bottom: 8px;
            background-color: #003b32 !important;
            border: 2px solid #003b32;
            color: white;
            font-size: 0.9rem;
            white-space: normal;
            height: auto;
            min-height: 40px;
            padding: 8px;
            border-radius: 5px;
            cursor: pointer;
        }

        .service-btn:hover {
            background-color: #efa543;
            border-color: #efa543;
        }

        .restart-btn {
            background-color: #0b6c5e;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.85rem;
        }

        .restart-btn:hover {
            background-color: #555555;
        }

        .bot-bubble a {
            color: #000000 !important;
            text-decoration: underline !important;
        }
    </style>
</head>

<body>

    <div id="chatbot-icon" onclick="toggleChatbot()">
        <i class="fas fa-tooth fa-2x"></i>
    </div>

    <div id="chatbot-window">
        <div id="chat-header">
            <span>Ivy Dental Clinic</span>
            <button type="button" style="background:none; border:none; color:white; font-size:1.2rem; cursor:pointer;" onclick="toggleChatbot()">✕</button>
        </div>
        <div id="chat-body"></div>
    </div>

    <script>
        const chatBody = document.getElementById('chat-body');
        const chatbotWindow = document.getElementById('chatbot-window');

        // Hospital Contact Information
        const contactNumber = '+91 7760605222 , 9740805222';
        const hospitalName = 'Ivy Dental Clinic';
        const hospitalAddress = '461, HMT Layout 3rd Block, Vidyaranyapura, Bengaluru, Karnataka 560097';

        // Updated Service Data
        const services = {
            'DentalImplants': {
                name: 'Dental Implants',
                content: 'At Ivy Dental Clinic, Dental Implants offer a strong, long-lasting, and natural-looking solution for replacing missing teeth and restoring confident function and appearance.',
            },
            'Aligners': {
                name: 'Aligners',
                content: 'At Ivy Dental Clinic, Clear Aligners provide a discreet and comfortable way to gradually straighten teeth using customized transparent trays without traditional metal braces.',
            },
            'DentalVeneers': {
                name: 'Dental Veneers',
                content: 'At Ivy Dental Clinic, Dental Veneers are customized thin shells designed to improve the shape, shade, and overall appearance of your smile while maintaining a natural look.',
            },
            'RootCanal': {
                name: 'Root Canal Treatment',
                content: 'At Ivy Dental Clinic, Root Canal Treatment helps preserve infected or severely decayed teeth by carefully removing the affected pulp, disinfecting the canals, and sealing the tooth securely.',
            },
            'DentalBridge': {
                name: 'Dental Bridge',
                content: 'At Ivy Dental Clinic, Dental Bridges are customized to replace one or more missing teeth by securely using adjacent teeth or implants for support and restoring your bite and smile.',
            },
            'PediatricDentistry': {
                name: 'Pediatric Dentistry',
                content: 'At Ivy Dental Clinic, Pediatric Dentistry focuses on gentle, friendly, and age-appropriate dental care for children and teenagers in a comfortable environment.',
            },
            'PeriodontalCare': {
                name: 'Periodontal Care',
                content: 'At Ivy Dental Clinic, Periodontal Care focuses on maintaining healthy gums through prevention, diagnosis, and treatment of gum-related conditions that can affect long-term oral health.',
            },
            'OralSurgery': {
                name: 'Oral Surgery',
                content: 'At Ivy Dental Clinic, Oral Surgery includes carefully planned procedures such as complex tooth extractions and other minor surgical dental treatments performed with precision and patient comfort in mind.',
            },
            'TeethWhitening': {
                name: 'Teeth Whitening',
                content: 'At Ivy Dental Clinic, Professional Teeth Whitening is designed to safely reduce stains and discoloration, helping you achieve a brighter and fresher-looking smile.',
            },
            'Dentures': {
                name: 'Dentures',
                content: 'At Ivy Dental Clinic, customized full and partial Dentures are designed to restore chewing function, comfort, and a natural-looking smile for patients with multiple missing teeth.',
            },
            'GeneralDentistry': {
                name: 'General Dentistry',
                content: 'At Ivy Dental Clinic, General Dentistry includes routine dental check-ups, preventive cleanings, tooth restorations, and ongoing oral healthcare for the entire family.',
            },
            'WisdomTeeth': {
                name: 'Wisdom Teeth Removal',
                content: 'At Ivy Dental Clinic, Wisdom Teeth Removal is planned carefully for impacted, painful, or problematic wisdom teeth to help prevent infection, crowding, and damage to nearby teeth.',
            }
        };

        // Toggle Chatbot Open/Close
        function toggleChatbot() {
            if (chatbotWindow.style.display === 'flex') {
                chatbotWindow.style.display = 'none';
            } else {
                chatbotWindow.style.display = 'flex';
                displayWelcomeMessage();
            }
        }

        // Append Message to Chat Body
        function appendMessage(text, sender) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add(`${sender}-msg`);

            const bubble = document.createElement('span');
            bubble.classList.add('message-bubble');
            if (sender === 'bot') {
                bubble.classList.add('bot-bubble');
            }

            bubble.innerHTML = text;
            messageDiv.appendChild(bubble);
            chatBody.appendChild(messageDiv);

            chatBody.scrollTop = chatBody.scrollHeight;
            return messageDiv;
        }

        // Display Welcome Message and Service Buttons
        function displayWelcomeMessage() {
            chatBody.innerHTML = '';

            const welcomeText = `Hi! Welcome to <br><b>${hospitalName}</b>.<br><br>Please select a service from the options below to know more about our treatments.`;

            appendMessage(welcomeText, 'bot');

            setTimeout(() => {
                const buttonsContainer = document.createElement('div');
                buttonsContainer.className = 'text-center mt-3';

                Object.keys(services).forEach(key => {
                    const btn = document.createElement('button');
                    btn.className = 'service-btn';
                    btn.textContent = services[key].name;
                    btn.onclick = () => showServiceDetails(key);
                    buttonsContainer.appendChild(btn);
                });

                chatBody.appendChild(buttonsContainer);
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 600);
        }

        // Show Service Details
        function showServiceDetails(serviceKey) {
            const service = services[serviceKey];

            const userClickedMsg = `Tell me more about ${service.name}.`;
            appendMessage(userClickedMsg, 'user');

            const contentMessage = service.content;

            const contactMessage = `
            ${contentMessage}
            <hr style="margin: 10px 0; border: 0; border-top: 1px solid #ccc;">
            For more details or to book an appointment, please contact <b>${hospitalName}</b>.<br><br>
            <b>Address:</b> ${hospitalAddress}<br><br>
            <b>Contact Number:</b> <a href="tel:${contactNumber}">${contactNumber}</a>
        `;

            setTimeout(() => {
                appendMessage(contactMessage, 'bot');

                const restartBtnContainer = document.createElement('div');
                restartBtnContainer.style.textAlign = 'center';
                restartBtnContainer.style.marginTop = '10px';
                restartBtnContainer.style.marginBottom = '10px';

                const restartBtn = document.createElement('button');
                restartBtn.className = 'restart-btn';
                restartBtn.textContent = 'Back to Main Menu';
                restartBtn.onclick = displayWelcomeMessage;

                restartBtnContainer.appendChild(restartBtn);
                chatBody.appendChild(restartBtnContainer);
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 600);
        }

        // Ensure chatbot starts closed
        document.addEventListener('DOMContentLoaded', () => {
            chatbotWindow.style.display = 'none';
        });
    </script>

</body>

</html>