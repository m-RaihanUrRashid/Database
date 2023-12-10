<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescriptions</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: lightblue;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-align: center;
        }

        .prescription {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        td {
            border-right: 1px solid lightgrey;
            padding: 8px;
        }

        .btn {
            padding: 10px;
            font-size: 14px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            margin-right: 10px;
        }

        @media screen and (max-width: 768px) {
            .btn {
                padding: 8px;
                font-size: 12px;
            }
        }

        .medicines-section {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Prescriptions</h1>

    @foreach($prescriptions as $prescription)
        <div class="prescription">
        <p>Prescription ID: {{ $prescription->cPrescID }}</p>
            <p>Issue Date: {{ $prescription->dIssueDate }}</p>
            <p>Patient ID: {{ $prescription->cpUserID }}</p>

            <!-- Button to expand medicines -->
            <button class="btn" onclick="toggleMedicines('{{ $prescription->cPrescID }}')">Expand Medicines</button>

            <!-- Button to delete prescription -->

            <form action="{{ route('prescription.delete', $prescription->cPrescID) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn-delete">Delete Prescription</button>
</form>
            <!-- Medicines section -->
            <div id="medicines-{{ $prescription->cPrescID }}" class="medicines-section">
                <h2>Medicines</h2>
                <ul>
                    @foreach($prescription->prescriptionMedicines as $medicine)
                        <li>{{ $medicine->cMedicine }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach

    <script>
        function toggleMedicines(prescriptionId) {
            var medicinesSection = document.getElementById('medicines-' + prescriptionId);
            medicinesSection.style.display = (medicinesSection.style.display === 'none' || medicinesSection.style.display === '') ? 'block' : 'none';
        }
    </script>

<button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>



<script>
    function goHome() {
        window.location.href = "/psychiatristHome";
    }
</script>


</body>
</html>
