<?php

declare(strict_types=1);

namespace App\Tests\Service;

use PHPUnit\Framework\Attributes\CoversClass;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\RickAndMortyApiService;

#[CoversClass(RickAndMortyApiService::class)]
final class RickAndMortyApiServiceTest extends KernelTestCase
{
    private ?RickAndMortyApiService $apiService = null;

    protected function setUp(): void
    {
        self::bootKernel();

        $container = static::getContainer();
        $this->apiService = $container->get(RickAndMortyApiService::class);
    }

    public function testCharactersResponseStructure(): void
    {
        $characters = $this->apiService->getCharacters();

        $this->assertIsArray($characters, 'Postacie powinny byc w tablicy.');
        $this->assertNotEmpty($characters, 'Lista postaci nie moze byc pusta.');

        $sample = $characters[array_key_first($characters)];

        $this->assertArrayHasKey('name', $sample);
        $this->assertArrayHasKey('episode_numbers', $sample);
        $this->assertIsArray($sample['episode_numbers']);

        foreach ($sample['episode_numbers'] as $number) {
            $this->assertIsInt($number, 'Numer odcinka powinien byc intem.');
        }
    }

    public function testAtLeastOneCharacterHasEpisodes(): void
    {
        $characters = $this->apiService->getCharacters();

        $hasEpisodes = array_filter($characters, function (array $char): bool {
            return !empty($char['episode_numbers']);
        });

        $this->assertNotEmpty($hasEpisodes, 'Do ktorejs z postaci musi byc przypisany odcinek.');
    }
}
