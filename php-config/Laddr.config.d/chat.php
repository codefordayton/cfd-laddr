<?php


Laddr::$chatLinker = function($channel = null) {
    return 'https://opendayton.slack.com/messages/'.urlencode($channel ?: 'general').'/';
};
