<?php

/**
 * Message translations for \kartik\password\StrengthValidator.
 *
 * It contains the localizable messages extracted from source code.
 * You may modify this file by translating the extracted messages.
 *
 * Each array element represents the translation (value) of a message (key).
 * If the value is empty, the message is considered as not translated.
 * Messages that no longer need translation will have their translations
 * enclosed between a pair of '@@' marks.
 *
 * Message string can be used with plural forms format. Check i18n section
 * of the guide for details.
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
return [
    '{attribute} should contain at least {n} {chars}, plural, =1{one character} other{# characters}}! ({found} found)' =>
    '{attribute} sollte mindestens {n, plural, =1{ein Zeichen} other{# Zeichen}} ({found} gefunden)',
    '{attribute} should contain at most {n, plural, =1{one character} other{# characters}}! ({found} found)' =>
    '{attribute} sollte höchstens {n, plural, =1{ein Zeichen} other{# Zeichen}} ({found} gefunden)',
    '{attribute} should contain exactly {n, plural, =1{one character} other{# characters}}! ({found} found)' =>
    '{attribute} sollte genau {n, plural, =1{ein Zeichen} other{# Zeichen}} ({found} gefunden)',
    '{attribute} cannot contain the username' => '{attribute} nicht den Benutzernamen enthalten',
    '{attribute} cannot contain an email address' => '{attribute} nicht die E-Mail-Adresse enthalten',
    '{attribute} must be a string' => '{attribute} muss ein String sein',
    '{attribute} should contain at least {n, plural, =1{one lower case character} other{# lower case characters}}! ({found} found)' =>
    '{attribute} sollte mindestens {n, plural, =1{ein Kleinbuchstaben enthalten} other{# Kleinbuchstaben enthalten}} ({found} gefunden)',
    '{attribute} should contain at least {n, plural, =1{one upper case character} other{# upper case characters}}! ({found} found)' =>
    '{attribute} sollte mindestens {n, plural, =1{ein Großbuchstaben enthalten} other{# Großbuchstaben enthalten}} ({found} gefunden)',
    '{attribute} should contain at least {n, plural, =1{one numeric / digit character} other{# numeric / digit characters}}! ({found} found)' =>
    '{attribute} sollte mindestens {n, plural, =1{numerisch / stelligen Zeichen enthalten} other{# numerisch / stelligen Zeichen enthalten}} ({found} gefunden)',
    '{attribute} should contain at least {n, plural, =1{one special character} other{# special characters}}! ({found} found)' =>
    '{attribute} sollte mindestens {n, plural, =1{ein Sonderzeichen enthalten} other{# Sonderzeichen enthalten}} ({found} gefunden)',
];
