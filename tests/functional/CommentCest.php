<?php

namespace App\Tests;

use App\Entity\Comment;
use Codeception\Util\HttpCode;

class CommentCest
{
    /**
     * @param FunctionalTester $I
     * @throws \Codeception\Exception\ModuleException
     */
    public function createComment(FunctionalTester $I)
    {
        $I->amOnLocalizedPage('/login');
        $I->submitForm('#main form', ['_username' => 'john_user', '_password' => 'kitten']);
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeCurrentRouteIs('blog_index');
        $I->click('article.post > h2 a');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeCurrentRouteIs('blog_post');
        $I->dontSee('Hi, Symfony!');
        $I->fillField('comment[content]', 'Hi, Symfony!');
        $I->followRedirects(false);
        $I->submitForm('#post-add-comment > form', []);
        $I->seeEmailIsSent(1);
        $I->seeEmailIsSent();
        $I->followRedirect();
        $I->seeCurrentRouteIs('blog_post');
        $I->see('Hi, Symfony!');
        $I->seeInRepository(Comment::class, ['content' => 'Hi, Symfony!']);
    }
}
