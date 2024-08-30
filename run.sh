#!/bin/bash

start powershell.exe "npm run dev"

start powershell.exe "php artisan serve --port=8565"

python -m webbrowser -t "http://localhost:8565/"

echo "
Default mail: leandrotomasjofre@gmail.com
Default password: pachamama
"

chmod +x run.sh