/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./index.php"],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                primary: '#3B82F6',
                secondary: '#06B6D4',
                accent: '#8B5CF6',
                dark: '#0A0A0A',
                'dark-card': '#111111',
                'dark-surface': '#1A1A1A',
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                mono: ['JetBrains Mono', 'monospace'],
            },
        }
    },
    plugins: [],
}
