<?php

class View {
    function generate($content_view, $template_view, $data) {
        include 'aplication/views/' . $template_view;
    }
}
