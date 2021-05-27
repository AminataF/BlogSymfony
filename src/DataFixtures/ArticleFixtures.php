<?php
namespace App\DataFixtures;

use App\Entity\Articles;
use App\Entity\Category;
use App\Entity\Comment;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager){
        $faker = \Faker\Factory::create('fr_FR');
        for($i = 1; $i <= 3; $i++){
            $category = new Category();
            $category->setTitle($faker->sentence())
                    ->setDescription($faker->paragraph());
            $manager->persist($category);

                for ($j=1; $j <= mt_rand(4, 6) ; $j++) {
                    $article = new Articles();
                    $content = implode('', $faker->paragraphs(5));
                    $article->setTitle($faker->sentence())
                        ->setContent($content)
                        ->setImage($faker->imageUrl())
                        ->setCreatedAt($faker->dateTimeBetween('-18 months'))
                        ->setCategory($category);
                    $manager->persist($article);

                        for ($k=1; $k <= mt_rand(4, 6) ; $k++) {
                            $comment = new Comment();
                            $content = implode('', $faker->paragraphs(2));
                            $now = new \DateTime();
                            $interval = $now->diff($article->getCreatedAt());
                            $days = $interval->days;
                            $min = '-' . $days . ' days';
                            $comment->setAuthor($faker->name())
                                    ->setContent($content)
                                    ->setCreatedAt($faker->dateTimeBetween($min))
                                    ->setArticles($article);
                            $manager->persist($comment);
                        }
                }
        }
        $manager->flush();
    }
}
