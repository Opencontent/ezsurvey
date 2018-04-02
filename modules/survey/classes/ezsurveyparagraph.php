<?php
/**
 * This file is part of the eZSurvey extension.
 *
 * @copyright Copyright (C) eZ Systems AS.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */

class eZSurveyParagraph extends eZSurveyQuestion
{
    function __construct( $row = false )
    {
        $row['type'] = 'Paragraph';
        parent::__construct( $row );
    }

    function canAnswer()
    {
        return false;
    }

    function questionNumberIterate( &$iterator )
    {
    }
}

eZSurveyQuestion::registerQuestionType( ezpI18n::tr( 'survey', 'Paragraph' ), 'Paragraph' );

?>
