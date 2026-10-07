<div style="padding: 12px; background-color: {{ $type === 'error' ? '#fef2f2' : '#f0fdf4' }}; border: 1px solid {{ $type === 'error' ? '#fca5a5' : '#86efac' }}; color: {{ $type === 'error' ? '#991b1b' : '#166534' }}; border-radius: 6px; margin-bottom: 15px;">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>