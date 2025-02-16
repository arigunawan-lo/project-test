<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $securityScript = "
            <script>
                document.addEventListener('keydown', function(event) {
                    if (event.key === 'PrintScreen') {
                        event.preventDefault();
                        alert('Screenshot tidak diizinkan!');
                    }
                });

                document.addEventListener('contextmenu', function(event) {
                    event.preventDefault();
                });

                document.addEventListener('copy', function(event) {
                    event.preventDefault();
                    alert('Copy-Paste tidak diizinkan!');
                });

                document.addEventListener('paste', function(event) {
                    event.preventDefault();
                });
            </script>
        ";

        $content = $response->getContent();
        if (str_contains($content, "</body>")) {
            $content = str_replace("</body>", $securityScript . "</body>", $content);
            $response->setContent($content);
        }

        return $response;
    }
}
