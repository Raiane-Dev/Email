<?php

    namespace Src\Authenticator;

    final class Format{

        public static function formatSlug(string $slug): string{
            $slug = strtolower($slug);
            $slug = preg_replace('/á|ã|â|À/', 'a', $slug);
            $slug = preg_replace('/õ|ô|ó/', 'o', $slug);
            $slug = preg_replace('/í|î|ì/', 'i', $slug);
            $slug = preg_replace('/ú|ù|û/', 'u', $slug);
            $slug = preg_replace('/é|ê|è/', 'e', $slug);
            return $slug;
        }
    }
?>