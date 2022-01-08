<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Sequence;


class DummyDataSeeder extends Seeder
{
    /**
     * Populate the database with dummy data for testing.
     * Complete dummy data generation including relationships.
     * Set the property values as required before running database seeder.
     *
     * @param \Faker\Generator $faker
     */
    public function run(\Faker\Generator $faker)
    {
        /** @var User[]|\Illuminate\Database\Eloquent\Collection<User> $users */
        $users = User::factory()->count(20)->create();

        foreach ($users as $user) {
            $user->followers()->attach($users->random(rand(0, 5)));
        }

        /** @var Article[]|\Illuminate\Database\Eloquent\Collection<Article> $articles */
        $articles = Article::factory()
            ->count(30)
            ->state(new Sequence(fn() => [
                'user_id' => $users->random(),
            ]))
            ->create();

        /** @var Tag[]|\Illuminate\Database\Eloquent\Collection<Tag> $tags */
        $tags = Tag::factory()
            ->count(20)
            ->state(new Sequence(fn() => [
                'name' => bin2hex(random_bytes(5))
            ]))
            ->create();

        foreach ($articles as $article) {
            $article->tags()->attach($tags->random(rand(0, 6)));
        }

        Comment::factory()
            ->count(60)
            ->state(new Sequence(fn() => [
                'article_id' => $articles->random(),
                'user_id' => $users->random(),
            ]))
            ->create();
    }
}
