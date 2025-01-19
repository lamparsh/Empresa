<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quality Event Management</title>
    <link rel="stylesheet" href="../../CSS/Style.css"> 
</head>
<body>

<?php include ('../Menu/MenusideView.php') ?>

    <div class="form-container">
    <h1>Quality Event Management</h1>
        <form id="eventForm" action="nextPage.php" method="POST" enctype="multipart/form-data">

            <!-- Employee Information -->
            <div class="form-section">
                <img src="../../Img/Logo.jpg" alt="Logo" class="logo">
                <h3>1. Employee Information</h3>
                <div class="input-group">
                    <label for="employeeName">Employee Name:</label>
                    <input type="text" id="employeeName" name="employeeName" required>
                </div>
                <div class="input-group">
                    <label for="employeeNumber">Employee Number:</label>
                    <input type="text" id="employeeNumber" name="employeeNumber" required>
                </div>
            </div>

            <!-- Event Information and Affected Lots -->
            <div class="form-section" id="eventInfoSection">
                <h3>2. Event Information and Affected Lots</h3>
                <div id="eventInfoFields">
                    <div class="input-group">
                        <label for="caseNumber">Case Number:</label>
                        <input type="text" id="caseNumber" name="caseNumber" required>
                    </div>
                    <div class="input-group">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="input-group">
                        <label for="module">Module:</label>
                        <select id="module" name="module" required>
                            <option value="">Select a module</option>
                            <option value="cleanRoom">Clean Room</option>
                            <option value="moldingRoom">Molding Room</option>
                            <option value="cleanRoom2">Clean Room 2</option>
                        </select>
                    </div>
                </div>
                <h3>Affected Lots</h3>
                <button type="button" onclick="addLotInput()">Add Lot Number</button>
                <div id="lotsAffectedFields"></div>
            </div>

            <!-- Indicators and Markers -->
            <div class="form-section" id="flaggingsIndicatorsSection">
                <h3>3. Indicators and Markers</h3>
                <div class="input-group">
                    <label for="yi">YI</label>
                    <input type="radio" id="yi" name="indicator" value="yi" required>
                    <label for="ptr">PTR</label>
                    <input type="radio" id="ptr" name="indicator" value="ptr" required>
                </div>
            </div>

            <!-- Risk Assessment -->
            <div class="form-section">
                <h3>4. Risk Assessment</h3>
                <textarea name="riskAssessment" id="riskAssessment" rows="4" placeholder="Details of risk assessment" style="resize: vertical;"></textarea>
            </div>

            <!-- Root Cause -->
            <div class="form-section">
                <h3>5. Root Cause</h3>
                <div class="input-group">
                    <label for="rootCauseCategory">Select Root Cause:</label>
                    <select name="rootCauseCategory" id="rootCauseCategory">
                        <option value="human">Human</option>
                        <option value="machine">Machine</option>
                        <option value="materials">Materials</option>
                        <option value="procedure">Procedure</option>
                        <option value="procedure">Material Environment</option>
                        <option value="procedure">Environment</option>
                    </select>
                </div>
                <textarea name="rootCause" id="rootCause" rows="4" placeholder="Details about the root cause" style="resize: vertical;"></textarea>
            </div>

            <!-- Estimated Scrap Loss -->
            <div class="form-section">
                <h3>6. Estimated Scrap Loss</h3>
                <input type="number" name="scrapLoss" id="scrapLoss" placeholder="Estimated loss">
            </div>

            <!-- Corrective Actions -->
            <div class="form-section">
                <h3>7. Corrective Actions</h3>
                <textarea name="ars" id="ars" rows="4" placeholder="Details of corrective actions" style="resize: vertical;"></textarea>
            </div>

            <div class="form-section">
                <h3>Email (within corrective actions)</h3>
                <textarea name="email" id="email" rows="2" placeholder="Enter email here for validation"></textarea>
            </div>

            <script>
                document.getElementById('ars').addEventListener('input', function () {
                    const emailText = document.getElementById('email').value;
                    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                    if (emailPattern.test(emailText)) {
                        document.getElementById('email').style.borderColor = 'green';
                    } else {
                        document.getElementById('email').style.borderColor = 'red';
                    }
                });
            </script>

            <!-- Meeting Minutes -->
            <div class="form-section">
                <h3>8. Meeting Minutas</h3>
                <textarea name="meetingMinutes" id="meetingMinutes" rows="4" placeholder="Details of the meeting" style="resize: vertical;"></textarea>
            </div>

            <!-- Attach File -->
            <div class="form-section">
                <h3>9. Attach File</h3>
                <input type="file" name="fileAttachment" id="fileAttachment">
            </div>

            <!-- Status -->
            <div class="form-section">
                <h3>10. Status</h3>
                <select name="status" id="status">
                    <option value="open">Open</option>
                    <option value="closed">Closed</option>
                    <option value="inProgress">In Progress</option>
                </select>
            </div>

            <button type="submit">Submit Form</button>
        </form>
    </div>

    <script>
        function addLotInput() {
            const div = document.createElement("div");
            div.className = "input-group";
            div.innerHTML = `<label for="lotNumber">Lot Number:</label>
                            <input type="text" name="lotNumber[]" placeholder="Lot Number" required>`;
            document.getElementById("lotsAffectedFields").appendChild(div);
        }
    </script>

<script>
    document.getElementById('myForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Obtener los valores del formulario
        const ars = document.getElementById('ars').value;
        const email = document.getElementById('email').value;

        // Validación simple para el campo de correo
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        let isValid = true;
        let errorMessage = '';

        if (!ars) {
            isValid = false;
            errorMessage += 'Corrective actions are required.\n';
        }

        if (!emailPattern.test(email)) {
            isValid = false;
            errorMessage += 'Please enter a valid email address.\n';
        }

        // Si la validación falla, mostrar el error
        if (!isValid) {
            alert(errorMessage);
            return;
        }

        // Si todo está bien, mostrar los datos en un resultado
        const result = `
            <h3>Form Submitted</h3>
            <p><strong>Corrective Actions:</strong> ${ars}</p>
            <p><strong>Email:</strong> ${email}</p>
        `;
        document.getElementById('result').innerHTML = result;
    });
</script>

</body>
</html>
