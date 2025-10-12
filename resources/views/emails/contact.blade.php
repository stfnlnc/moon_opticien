<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message</title>
</head>
<body style="background-color:#D1DDD3;">
<div style="background-color:#D1DDD3;padding:24px;font-family:system-ui,sans-serif;color:#1E3A3D;">
    <div style="max-width:600px;margin:0 auto;background-color:#ffffff;padding:24px;border-radius:12px;box-shadow:0 2px 10px rgba(0,0,0,0.05);">

        <h1 style="font-size:1.5rem;font-weight:700;margin-bottom:16px;color:#1E3A3D;">Nouveau message</h1>

        <p style="margin:4px 0;">De <strong style="font-weight:700;">{{ $data['firstname'] }} {{ $data['lastname'] }}</strong></p>
        <p style="margin:4px 0;"><a href="mailto:{{ $data['email'] }}" style="color:#1E3A3D;text-decoration:underline;">{{ $data['email'] }}</a></p>
        <p style="margin:4px 0;"><a href="tel:{{ $data['phone'] }}" style="color:#1E3A3D;text-decoration:underline;">{{ $data['phone'] }}</a></p>

        @if(!empty($data['message']))
            <hr style="border:none;border-top:1px solid #1E3A3D;margin:16px 0;">
            <p style="margin:4px 0;"><strong style="font-weight:700;">Message :</strong></p>
            <p style="margin:4px 0;">{{ $data['message'] }}</p>
        @endif

        @if(!empty($data['exam']) || !empty($data['audition']) || !empty($data['glasses']) || !empty($data['lenses']) || !empty($data['buy']))
            <hr style="border:none;border-top:1px solid #1E3A3D;margin:16px 0;">
            <p style="margin:4px 0;"><strong style="font-weight:700;">Prendre rendez-vous pour :</strong></p>
            <ul style="padding-left:20px;margin:8px 0;">
                @if(!empty($data['exam']))
                    <li>{{ $data['exam'] }}</li>
                @endif
                @if(!empty($data['audition']))
                    <li>{{ $data['audition'] }}</li>
                @endif
                @if(!empty($data['glasses']))
                    <li>{{ $data['glasses'] }}</li>
                @endif
                @if(!empty($data['lenses']))
                    <li>{{ $data['lenses'] }}</li>
                @endif
                @if(!empty($data['buy']))
                    <li>{{ $data['buy'] }}</li>
                @endif
            </ul>
        @endif

        @if(!empty($data['address']))
            <hr style="border:none;border-top:1px solid #1E3A3D;margin:16px 0;">
            <p style="margin:4px 0;"><strong style="font-weight:700;">Demande de rendez-vous à domicile :</strong></p>
            <p style="margin:4px 0;">{{ $data['address'] }}</p>
            <p style="margin:4px 0;"><strong style="font-weight:700;">Ordonnance à jour :</strong></p>
            <p style="margin:4px 0;">{{ $data['prescription'] }}</p>
        @endif

        @if(!empty($data['lens-model']))
            <hr style="border:none;border-top:1px solid #1E3A3D;margin:16px 0;">
            <p style="margin:4px 0;"><strong style="font-weight:700;">Modèle de lentilles :</strong></p>
            <p style="margin:4px 0;">{{ $data['lens-model'] }}</p>
        @endif

        @if(!empty($data['left-sphere']) || !empty($data['left-cylinder']) || !empty($data['left-axis']) || !empty($data['left-add']) || !empty($data['left-radius']))
            <hr style="border:none;border-top:1px solid #1E3A3D;margin:16px 0;">
            <h2 style="font-size:1.25rem;font-weight:600;margin-top:24px;margin-bottom:8px;color:#1E3A3D;">Œil gauche</h2>
            @if(!empty($data['left-sphere']))
                <p style="margin:4px 0;">Sphère (OG) : <strong style="font-weight:700;">{{ $data['left-sphere'] }}</strong></p>
            @endif
            @if(!empty($data['left-cylinder']))
                <p style="margin:4px 0;">Cylindre (OG) : <strong style="font-weight:700;">{{ $data['left-cylinder'] }}</strong></p>
            @endif
            @if(!empty($data['left-axis']))
                <p style="margin:4px 0;">Axe (OG) : <strong style="font-weight:700;">{{ $data['left-axis'] }}</strong></p>
            @endif
            @if(!empty($data['left-add']))
                <p style="margin:4px 0;">Addition (OG) : <strong style="font-weight:700;">{{ $data['left-add'] }}</strong></p>
            @endif
            @if(!empty($data['left-radius']))
                <p style="margin:4px 0;">Rayon (OG) : <strong style="font-weight:700;">{{ $data['left-radius'] }}</strong></p>
            @endif
        @endif

        @if(!empty($data['right-sphere']) || !empty($data['right-cylinder']) || !empty($data['right-axis']) || !empty($data['right-add']) || !empty($data['right-radius']))
            <hr style="border:none;border-top:1px solid #1E3A3D;margin:16px 0;">
            <h2 style="font-size:1.25rem;font-weight:600;margin-top:24px;margin-bottom:8px;color:#1E3A3D;">Œil droit</h2>
            @if(!empty($data['right-sphere']))
                <p style="margin:4px 0;">Sphère (OD) : <strong style="font-weight:700;">{{ $data['right-sphere'] }}</strong></p>
            @endif
            @if(!empty($data['right-cylinder']))
                <p style="margin:4px 0;">Cylindre (OD) : <strong style="font-weight:700;">{{ $data['right-cylinder'] }}</strong></p>
            @endif
            @if(!empty($data['right-axis']))
                <p style="margin:4px 0;">Axe (OD) : <strong style="font-weight:700;">{{ $data['right-axis'] }}</strong></p>
            @endif
            @if(!empty($data['right-add']))
                <p style="margin:4px 0;">Addition (OD) : <strong style="font-weight:700;">{{ $data['right-add'] }}</strong></p>
            @endif
            @if(!empty($data['right-radius']))
                <p style="margin:4px 0;">Rayon (OD) : <strong style="font-weight:700;">{{ $data['right-radius'] }}</strong></p>
            @endif
        @endif

    </div>
</div>

</body>
</html>
