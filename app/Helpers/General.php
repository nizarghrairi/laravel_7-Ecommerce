<?php

function get_languages()
{
    App\Models\Language::active() ->Selection() ->get();
}

function get_default_lang()
{
    Config::get('app.local');
}
