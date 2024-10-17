<!-- Loader Component -->
<div id="loader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #ffffff; display: flex; justify-content: center; align-items: center; z-index: 9999;">
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="40" stroke="#3498db" stroke-width="4" fill="none" stroke-linecap="round"/>
        <circle cx="50" cy="50" r="40" stroke="#f3f3f3" stroke-width="4" stroke-dasharray="80" stroke-dashoffset="60" fill="none" stroke-linecap="round">
            <animateTransform attributeName="transform" type="rotate" dur="2s" repeatCount="indefinite" from="0 50 50" to="360 50 50"/>
        </circle>
    </svg>
</div>
