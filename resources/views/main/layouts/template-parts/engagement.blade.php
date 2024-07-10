@php
    $mode ??= 'dark';
    $modeInv = $mode === 'dark' ? 'light' : 'dark';
@endphp

<section class="container__full-width c--primary-{{ $modeInv }} bg--secondary-{{ $mode }} flex col align--center">
    <div class="container flex col gap--10">
        <h2>Nos engagements</h2>
        <div class="flex col w--100">
            <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-{{ $modeInv }}">
                <div class="flex row gap--3 align--center w--30 w-100-mobile">
                    <x-icon.dot-small class="icon__dot-small icon--primary-{{ $modeInv }}"></x-icon.dot-small>
                    <p class="text--l">Des prix justes</p>
                </div>
                <p class="text--m">
                    Nous vous proposons des prix justes pour des lunettes de qualité adaptées à votre budget.
                </p>
            </div>
            <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-{{ $modeInv }}">
                <div class="flex row gap--3 align--center w--30 w-100-mobile">
                    <x-icon.dot-small class="icon__dot-small icon--primary-{{ $modeInv }}"></x-icon.dot-small>
                    <p class="text--l">Service France Garanti</p>
                </div>
                <p class="text--m">
                    Profitez de notre engagement pour vous garantir des solutions optiques fiables.
                </p>
            </div>
            <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-{{ $modeInv }}">
                <div class="flex row gap--3 align--center w--30 w-100-mobile">
                    <x-icon.dot-small class="icon__dot-small icon--primary-{{ $modeInv }}"></x-icon.dot-small>
                    <p class="text--l">Tiers payant & 100% santé</p>
                </div>
                <p class="text--m">
                    Bénéficiez du tiers payant et du 100% santé pour des lunettes sans frais à votre charge.
                </p>
            </div>
            <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-{{ $modeInv }}">
                <div class="flex row gap--3 align--center w--30 w-100-mobile">
                    <x-icon.dot-small class="icon__dot-small icon--primary-{{ $modeInv }}"></x-icon.dot-small>
                    <p class="text--l">Facilités de paiement</p>
                </div>
                <p class="text--m">
                    Découvrez nos facilités de paiement pour rendre l'achat de vos lunettes plus accessible.
                </p>
            </div>
        </div>
    </div>
</section>
