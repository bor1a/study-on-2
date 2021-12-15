<?
namespace App\DataFixtures;

use App\Entity\Course;
use App\Entity\Lesson;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create course
        for ($i = 0; $i < 5; $i++) {
            $course = new Course();
            $course->setName('Course ' . $i);
            $course->setCode('course_' . $i);
            $course->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur velit lectus, efficitur id lorem id, pulvinar cursus magna. Sed congue mauris non massa rhoncus, a elementum odio malesuada. Nam sagittis bibendum ultrices.');
			for ($j = 0; $j < 5; $j++) {
				$less = new Lesson();
				$less->setName('Lesson ' . $j);
				$less->setCourse($course);
				$less->setNumber($j);
				$less->setDescription('Nam et neque eu arcu porta placerat non non nunc. Duis lectus nulla, semper a risus ac, venenatis pharetra neque. Nullam lectus lacus, molestie ac auctor ut, luctus quis urna. Fusce sit amet dolor sed urna mollis vehicula at non ante. ');
				$manager->persist($less);
			}
            $manager->persist($course);
        }
        $manager->flush();
    }
}