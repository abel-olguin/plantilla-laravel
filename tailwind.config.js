/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.{blade.php, js, ts}"
    ],
    safelist: [
        'bg-red-50',
        'bg-yellow-50',
        'bg-green-50',
        'text-red-600',
        'text-yellow-600',
        'text-green-600',
        'bg-red-600',
        'bg-yellow-600',
        'bg-green-600',
        'alert-success',
        'alert-warning',
        'alert-error',
        'sortable-chosen',
        'drag-element'
    ],
    theme: {
        extend: {
            height: {
                '600': '600PX'
            },
            animation: {
                'ping-slow': 'ping 1s linear infinite',
            }
        },
    },
    plugins: [],
}

