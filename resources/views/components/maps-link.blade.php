@props(['address'])

<div>
    <a href="https://maps.google.com/?q={{ $address }}" target="_blank">{{ $address }}</a>
</div>
