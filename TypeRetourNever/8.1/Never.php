<?php

function redirect(string $url): never {
    header('Location: ' . $url);
    exit(1);
}

redirect("string");