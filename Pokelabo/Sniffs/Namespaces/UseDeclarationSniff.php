<?php
/**
 * PSR2_Sniffs_Namespaces_UseDeclarationSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2012 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PSR2_Sniffs_Namespaces_UseDeclarationSniff', true) === false) {
    $error = 'Class PSR2_Sniffs_Namespaces_UseDeclarationSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * PSR2_Sniffs_Namespaces_UseDeclarationSniff.
 *
 * Ensures USE blocks are declared correctly.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2012 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: 1.5.2
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class Pokelabo_Sniffs_Namespaces_UseDeclarationSniff extends PSR2_Sniffs_Namespaces_UseDeclarationSniff
{
}//end class


?>
