<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stellenliste</title>
</head>
<body style="font-family: sans-serif">
    <div class="container mt-4">
        <h1>Detailansicht von Stellenanzeigen</h1>
        <table class="table" style="border: 2px solid black">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Bezeichnung</th>
                    <th>Beschreibung</th>
                    <th>Gehalt</th>
                    <th>Standort</th>
                    {{-- <th>Kategorie</th> --}}
                    {{-- <th>Company</th> --}}                    
                </tr>
            </thead>
            <tbody>
                @foreach ($stellen as $stelle)
                    <tr>
                        <div style="width: max-content; height: max-content">
                        <td style="padding-left: 10px; height: 30px; border: 1px solid black">{{ $stelle->id }}</td>
                        <td style="padding-left: 10px; height: 30px; border: 1px solid black">{{ $stelle->bezeichnung }}</td>
                        <td style="padding-left: 10px; height: 30px; border: 1px solid black">{{ $stelle->beschreibung }}</td>
                        <td style="padding-left: 10px; height: 30px; border: 1px solid black">{{ $stelle->salary }}</td>
                        <td style="padding-left: 10px; height: 30px; border: 1px solid black">{{ $stelle->standort }}</td> 
                        <td style="padding-left: 10px; height: 30px; border: 1px solid black">{{ $stelle->category_id}}</td>
                        <td style="padding-left: 10px; height: 30px; border: 1px solid black">{{ $stelle->company_id}}</td>                        
                        

                        {{--Company und Category der jeweiligen Stelle anzeigen lassen hat leider nicht funktioniert :/ --}}
                        </div>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>