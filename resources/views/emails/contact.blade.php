<x-mail::message>
# Nouveau message

De **{{ $data['firstname'] }} {{ $data['lastname'] }}**
<br>
<a href="mailto:{{ $data['email'] }}">
{{ $data['email'] }}
</a>
<br>
<a href="tel:{{ $data['phone'] }}">
{{ $data['phone'] }}
</a>

@if(!empty($data['message']))

---

Message : <br>
{{ $data['message'] }}
@endif

@if(!empty($data['exam']) || !empty($data['glasses']) || !empty($data['lenses']) || !empty($data['buy']))

---

Prendre rendez-vous pour :
@if(!empty($data['exam']))
- {{ $data['exam'] }}
@endif
@if(!empty($data['glasses']))
- {{ $data['glasses'] }}
@endif
@if(!empty($data['lenses']))
- {{ $data['lenses'] }}
@endif
@if(!empty($data['buy']))
- {{ $data['buy'] }}
@endif
@endif

@if(!empty($data['address']))

---

Demande de rendez-vous à domicile : <br>
**{{ $data['address'] }}**

Ordonnance à jour : <br>
**{{ $data['prescription'] }}**
@endif

@if(!empty($data['lens-model']))

---

Modèle de lentilles : <br>
**{{ $data['lens-model'] }}**
@endif

@if(!empty($data['left-sphere']) || !empty($data['left-cylinder']) || !empty($data['left-axis']) || !empty($data['left-add']) || !empty($data['left-radius']))

---

## Oeil gauche
@if(!empty($data['left-sphere']))
Sphère (OG) : <br>
**{{ $data['left-sphere'] }}** <br><br>
@endif
@if(!empty($data['left-cylinder']))
Cylindre (OG) : <br>
**{{ $data['left-cylinder'] }}** <br><br>
@endif
@if(!empty($data['left-axis']))
Axe (OG) : <br>
**{{ $data['left-axis'] }}** <br><br>
@endif
@if(!empty($data['left-add']))
Addition (OG) : <br>
**{{ $data['left-add'] }}** <br><br>
@endif
@if(!empty($data['left-radius']))
Rayon (OG) : <br>
**{{ $data['left-radius'] }}** <br><br>
@endif
@endif

@if(!empty($data['left-sphere']) || !empty($data['left-cylinder']) || !empty($data['left-axis']) || !empty($data['left-add']) || !empty($data['left-radius']))

---

## Oeil droit
@if(!empty($data['right-sphere']))
Sphère (OD) : <br>
**{{ $data['right-sphere'] }}** <br><br>
@endif
@if(!empty($data['right-cylinder']))
Cylindre (OD) : <br>
**{{ $data['right-cylinder'] }}** <br><br>
@endif
@if(!empty($data['right-axis']))
Axe (OD) : <br>
**{{ $data['right-axis'] }}** <br><br>
@endif
@if(!empty($data['right-add']))
Addition (OD) : <br>
**{{ $data['right-add'] }}** <br><br>
@endif
@if(!empty($data['right-radius']))
Rayon (OD) : <br>
**{{ $data['right-radius'] }}** <br><br>
@endif
@endif

</x-mail::message>
