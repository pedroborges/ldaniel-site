<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98f1cdc138a689084833ad18a5789c50
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '7d8c19660fc7bda7e3f1bb627c20c455' => __DIR__ . '/..' . '/yooper/stop-words/src/StopWordFactory.php',
        '82b15671fa4352bd2c1ea8902d4c0c5d' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/helpers/storage.php',
        'c2fe535f6d51f069823351f60bd6b280' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/helpers/print.php',
        '34faac671c44560451a381662d8b697c' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/helpers/simplified.php',
        '97c3b78656a7c2fa22581078400c5264' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/helpers/helpers.php',
        '701340487703d077fa1bf3462f5a1343' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/helpers/interactive_help.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yooper\\' => 7,
        ),
        'W' => 
        array (
            'Wamania\\Snowball\\' => 17,
        ),
        'T' => 
        array (
            'TextAnalysis\\' => 13,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'L' => 
        array (
            'Ldaniel\\RelatedPages\\' => 21,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yooper\\' => 
        array (
            0 => __DIR__ . '/..' . '/yooper/nicknames/src',
        ),
        'Wamania\\Snowball\\' => 
        array (
            0 => __DIR__ . '/..' . '/wamania/php-stemmer/src',
        ),
        'TextAnalysis\\' => 
        array (
            0 => __DIR__ . '/..' . '/yooper/php-text-analysis/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Ldaniel\\RelatedPages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'Ldaniel\\RelatedPages\\RelatedPages' => __DIR__ . '/../..' . '/src/RelatedPages.php',
        'Porter' => __DIR__ . '/..' . '/camspiers/porter-stemmer/src/Porter.php',
        'Sentence' => __DIR__ . '/..' . '/vanderlee/php-sentence/classes/Sentence.php',
        'Symfony\\Component\\Console\\Application' => __DIR__ . '/..' . '/symfony/console/Application.php',
        'Symfony\\Component\\Console\\CommandLoader\\CommandLoaderInterface' => __DIR__ . '/..' . '/symfony/console/CommandLoader/CommandLoaderInterface.php',
        'Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/ContainerCommandLoader.php',
        'Symfony\\Component\\Console\\CommandLoader\\FactoryCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/FactoryCommandLoader.php',
        'Symfony\\Component\\Console\\Command\\Command' => __DIR__ . '/..' . '/symfony/console/Command/Command.php',
        'Symfony\\Component\\Console\\Command\\HelpCommand' => __DIR__ . '/..' . '/symfony/console/Command/HelpCommand.php',
        'Symfony\\Component\\Console\\Command\\ListCommand' => __DIR__ . '/..' . '/symfony/console/Command/ListCommand.php',
        'Symfony\\Component\\Console\\Command\\LockableTrait' => __DIR__ . '/..' . '/symfony/console/Command/LockableTrait.php',
        'Symfony\\Component\\Console\\ConsoleEvents' => __DIR__ . '/..' . '/symfony/console/ConsoleEvents.php',
        'Symfony\\Component\\Console\\DependencyInjection\\AddConsoleCommandPass' => __DIR__ . '/..' . '/symfony/console/DependencyInjection/AddConsoleCommandPass.php',
        'Symfony\\Component\\Console\\Descriptor\\ApplicationDescription' => __DIR__ . '/..' . '/symfony/console/Descriptor/ApplicationDescription.php',
        'Symfony\\Component\\Console\\Descriptor\\Descriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/Descriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\DescriptorInterface' => __DIR__ . '/..' . '/symfony/console/Descriptor/DescriptorInterface.php',
        'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/JsonDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/MarkdownDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\TextDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/TextDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/XmlDescriptor.php',
        'Symfony\\Component\\Console\\EventListener\\ErrorListener' => __DIR__ . '/..' . '/symfony/console/EventListener/ErrorListener.php',
        'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleCommandEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleErrorEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleTerminateEvent.php',
        'Symfony\\Component\\Console\\Exception\\CommandNotFoundException' => __DIR__ . '/..' . '/symfony/console/Exception/CommandNotFoundException.php',
        'Symfony\\Component\\Console\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/console/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Console\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Console\\Exception\\InvalidOptionException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidOptionException.php',
        'Symfony\\Component\\Console\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/console/Exception/LogicException.php',
        'Symfony\\Component\\Console\\Exception\\NamespaceNotFoundException' => __DIR__ . '/..' . '/symfony/console/Exception/NamespaceNotFoundException.php',
        'Symfony\\Component\\Console\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/console/Exception/RuntimeException.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatter' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatter.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyle.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleStack.php',
        'Symfony\\Component\\Console\\Formatter\\WrappableOutputFormatterInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/WrappableOutputFormatterInterface.php',
        'Symfony\\Component\\Console\\Helper\\DebugFormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DebugFormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\DescriptorHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DescriptorHelper.php',
        'Symfony\\Component\\Console\\Helper\\FormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/FormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\Helper' => __DIR__ . '/..' . '/symfony/console/Helper/Helper.php',
        'Symfony\\Component\\Console\\Helper\\HelperInterface' => __DIR__ . '/..' . '/symfony/console/Helper/HelperInterface.php',
        'Symfony\\Component\\Console\\Helper\\HelperSet' => __DIR__ . '/..' . '/symfony/console/Helper/HelperSet.php',
        'Symfony\\Component\\Console\\Helper\\InputAwareHelper' => __DIR__ . '/..' . '/symfony/console/Helper/InputAwareHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProcessHelper' => __DIR__ . '/..' . '/symfony/console/Helper/ProcessHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProgressBar' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressBar.php',
        'Symfony\\Component\\Console\\Helper\\ProgressIndicator' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressIndicator.php',
        'Symfony\\Component\\Console\\Helper\\QuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/QuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/SymfonyQuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\Table' => __DIR__ . '/..' . '/symfony/console/Helper/Table.php',
        'Symfony\\Component\\Console\\Helper\\TableCell' => __DIR__ . '/..' . '/symfony/console/Helper/TableCell.php',
        'Symfony\\Component\\Console\\Helper\\TableRows' => __DIR__ . '/..' . '/symfony/console/Helper/TableRows.php',
        'Symfony\\Component\\Console\\Helper\\TableSeparator' => __DIR__ . '/..' . '/symfony/console/Helper/TableSeparator.php',
        'Symfony\\Component\\Console\\Helper\\TableStyle' => __DIR__ . '/..' . '/symfony/console/Helper/TableStyle.php',
        'Symfony\\Component\\Console\\Input\\ArgvInput' => __DIR__ . '/..' . '/symfony/console/Input/ArgvInput.php',
        'Symfony\\Component\\Console\\Input\\ArrayInput' => __DIR__ . '/..' . '/symfony/console/Input/ArrayInput.php',
        'Symfony\\Component\\Console\\Input\\Input' => __DIR__ . '/..' . '/symfony/console/Input/Input.php',
        'Symfony\\Component\\Console\\Input\\InputArgument' => __DIR__ . '/..' . '/symfony/console/Input/InputArgument.php',
        'Symfony\\Component\\Console\\Input\\InputAwareInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputAwareInterface.php',
        'Symfony\\Component\\Console\\Input\\InputDefinition' => __DIR__ . '/..' . '/symfony/console/Input/InputDefinition.php',
        'Symfony\\Component\\Console\\Input\\InputInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputInterface.php',
        'Symfony\\Component\\Console\\Input\\InputOption' => __DIR__ . '/..' . '/symfony/console/Input/InputOption.php',
        'Symfony\\Component\\Console\\Input\\StreamableInputInterface' => __DIR__ . '/..' . '/symfony/console/Input/StreamableInputInterface.php',
        'Symfony\\Component\\Console\\Input\\StringInput' => __DIR__ . '/..' . '/symfony/console/Input/StringInput.php',
        'Symfony\\Component\\Console\\Logger\\ConsoleLogger' => __DIR__ . '/..' . '/symfony/console/Logger/ConsoleLogger.php',
        'Symfony\\Component\\Console\\Output\\BufferedOutput' => __DIR__ . '/..' . '/symfony/console/Output/BufferedOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutput' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutputInterface.php',
        'Symfony\\Component\\Console\\Output\\ConsoleSectionOutput' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleSectionOutput.php',
        'Symfony\\Component\\Console\\Output\\NullOutput' => __DIR__ . '/..' . '/symfony/console/Output/NullOutput.php',
        'Symfony\\Component\\Console\\Output\\Output' => __DIR__ . '/..' . '/symfony/console/Output/Output.php',
        'Symfony\\Component\\Console\\Output\\OutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/OutputInterface.php',
        'Symfony\\Component\\Console\\Output\\StreamOutput' => __DIR__ . '/..' . '/symfony/console/Output/StreamOutput.php',
        'Symfony\\Component\\Console\\Question\\ChoiceQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ChoiceQuestion.php',
        'Symfony\\Component\\Console\\Question\\ConfirmationQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ConfirmationQuestion.php',
        'Symfony\\Component\\Console\\Question\\Question' => __DIR__ . '/..' . '/symfony/console/Question/Question.php',
        'Symfony\\Component\\Console\\Style\\OutputStyle' => __DIR__ . '/..' . '/symfony/console/Style/OutputStyle.php',
        'Symfony\\Component\\Console\\Style\\StyleInterface' => __DIR__ . '/..' . '/symfony/console/Style/StyleInterface.php',
        'Symfony\\Component\\Console\\Style\\SymfonyStyle' => __DIR__ . '/..' . '/symfony/console/Style/SymfonyStyle.php',
        'Symfony\\Component\\Console\\Terminal' => __DIR__ . '/..' . '/symfony/console/Terminal.php',
        'Symfony\\Component\\Console\\Tester\\ApplicationTester' => __DIR__ . '/..' . '/symfony/console/Tester/ApplicationTester.php',
        'Symfony\\Component\\Console\\Tester\\CommandTester' => __DIR__ . '/..' . '/symfony/console/Tester/CommandTester.php',
        'Symfony\\Component\\Console\\Tester\\TesterTrait' => __DIR__ . '/..' . '/symfony/console/Tester/TesterTrait.php',
        'Symfony\\Contracts\\Cache\\CacheInterface' => __DIR__ . '/..' . '/symfony/contracts/Cache/CacheInterface.php',
        'Symfony\\Contracts\\Cache\\CacheTrait' => __DIR__ . '/..' . '/symfony/contracts/Cache/CacheTrait.php',
        'Symfony\\Contracts\\Cache\\CallbackInterface' => __DIR__ . '/..' . '/symfony/contracts/Cache/CallbackInterface.php',
        'Symfony\\Contracts\\Cache\\ItemInterface' => __DIR__ . '/..' . '/symfony/contracts/Cache/ItemInterface.php',
        'Symfony\\Contracts\\Cache\\TagAwareCacheInterface' => __DIR__ . '/..' . '/symfony/contracts/Cache/TagAwareCacheInterface.php',
        'Symfony\\Contracts\\Service\\ResetInterface' => __DIR__ . '/..' . '/symfony/contracts/Service/ResetInterface.php',
        'Symfony\\Contracts\\Service\\ServiceLocatorTrait' => __DIR__ . '/..' . '/symfony/contracts/Service/ServiceLocatorTrait.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => __DIR__ . '/..' . '/symfony/contracts/Service/ServiceSubscriberInterface.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => __DIR__ . '/..' . '/symfony/contracts/Service/ServiceSubscriberTrait.php',
        'Symfony\\Contracts\\Tests\\Cache\\CacheTraitTest' => __DIR__ . '/..' . '/symfony/contracts/Tests/Cache/CacheTraitTest.php',
        'Symfony\\Contracts\\Tests\\Cache\\TestPool' => __DIR__ . '/..' . '/symfony/contracts/Tests/Cache/CacheTraitTest.php',
        'Symfony\\Contracts\\Tests\\Service\\ChildTestService' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceSubscriberTraitTest.php',
        'Symfony\\Contracts\\Tests\\Service\\ParentTestService' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceSubscriberTraitTest.php',
        'Symfony\\Contracts\\Tests\\Service\\ServiceLocatorTest' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceLocatorTest.php',
        'Symfony\\Contracts\\Tests\\Service\\ServiceSubscriberTraitTest' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceSubscriberTraitTest.php',
        'Symfony\\Contracts\\Tests\\Service\\TestService' => __DIR__ . '/..' . '/symfony/contracts/Tests/Service/ServiceSubscriberTraitTest.php',
        'Symfony\\Contracts\\Tests\\Translation\\TranslatorTest' => __DIR__ . '/..' . '/symfony/contracts/Tests/Translation/TranslatorTest.php',
        'Symfony\\Contracts\\Translation\\LocaleAwareInterface' => __DIR__ . '/..' . '/symfony/contracts/Translation/LocaleAwareInterface.php',
        'Symfony\\Contracts\\Translation\\TranslatorInterface' => __DIR__ . '/..' . '/symfony/contracts/Translation/TranslatorInterface.php',
        'Symfony\\Contracts\\Translation\\TranslatorTrait' => __DIR__ . '/..' . '/symfony/contracts/Translation/TranslatorTrait.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'TextAnalysis\\Adapters\\ArrayDataReaderAdapter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Adapters/ArrayDataReaderAdapter.php',
        'TextAnalysis\\Adapters\\EnchantAdapter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Adapters/EnchantAdapter.php',
        'TextAnalysis\\Adapters\\JsonDataAdapter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Adapters/JsonDataAdapter.php',
        'TextAnalysis\\Adapters\\JsonWriterAdapter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Adapters/JsonWriterAdapter.php',
        'TextAnalysis\\Adapters\\PspellAdapter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Adapters/PspellAdapter.php',
        'TextAnalysis\\Analysis\\DateAnalysis' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Analysis/DateAnalysis.php',
        'TextAnalysis\\Analysis\\FreqDist' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Analysis/FreqDist.php',
        'TextAnalysis\\Analysis\\Keywords\\Rake' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Analysis/Keywords/Rake.php',
        'TextAnalysis\\Analysis\\Summarize\\Simple' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Analysis/Summarize/Simple.php',
        'TextAnalysis\\Classifiers\\NaiveBayes' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Classifiers/NaiveBayes.php',
        'TextAnalysis\\Collections\\DocumentArrayCollection' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Collections/DocumentArrayCollection.php',
        'TextAnalysis\\Collocations\\CollocationFinder' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Collocations/CollocationFinder.php',
        'TextAnalysis\\Comparisons\\CosineSimilarityComparison' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Comparisons/CosineSimilarityComparison.php',
        'TextAnalysis\\Comparisons\\HammingDistanceComparison' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Comparisons/HammingDistanceComparison.php',
        'TextAnalysis\\Comparisons\\JaccardIndexComparison' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Comparisons/JaccardIndexComparison.php',
        'TextAnalysis\\Comparisons\\JaroWinklerComparison' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Comparisons/JaroWinklerComparison.php',
        'TextAnalysis\\Comparisons\\LevenshteinComparison' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Comparisons/LevenshteinComparison.php',
        'TextAnalysis\\Comparisons\\LongestCommonSubstringComparison' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Comparisons/LongestCommonSubstringComparison.php',
        'TextAnalysis\\Comparisons\\MostFreqCharComparison' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Comparisons/MostFreqCharComparison.php',
        'TextAnalysis\\Comparisons\\SimilarTextComparison' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Comparisons/SimilarTextComparison.php',
        'TextAnalysis\\Console\\Commands\\NltkPackageInstallAllCommand' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Console/Commands/NltkPackageInstallAllCommand.php',
        'TextAnalysis\\Console\\Commands\\NltkPackageInstallCommand' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Console/Commands/NltkPackageInstallCommand.php',
        'TextAnalysis\\Console\\Commands\\NltkPackageListCommand' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Console/Commands/NltkPackageListCommand.php',
        'TextAnalysis\\Console\\Commands\\StopWordsCommand' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Console/Commands/StopWordsCommand.php',
        'TextAnalysis\\Console\\Commands\\VocabSizeCommand' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Console/Commands/VocabSizeCommand.php',
        'TextAnalysis\\Corpus\\ImportCorpus' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Corpus/ImportCorpus.php',
        'TextAnalysis\\Corpus\\NameCorpus' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Corpus/NameCorpus.php',
        'TextAnalysis\\Corpus\\ReadCorpusAbstract' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Corpus/ReadCorpusAbstract.php',
        'TextAnalysis\\Corpus\\TextCorpus' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Corpus/TextCorpus.php',
        'TextAnalysis\\Corpus\\WordnetCorpus' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Corpus/WordnetCorpus.php',
        'TextAnalysis\\Documents\\ContentDocument' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Documents/ContentDocument.php',
        'TextAnalysis\\Documents\\DocumentAbstract' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Documents/DocumentAbstract.php',
        'TextAnalysis\\Documents\\TokensDocument' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Documents/TokensDocument.php',
        'TextAnalysis\\Downloaders\\DownloadPackageFactory' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Downloaders/DownloadPackageFactory.php',
        'TextAnalysis\\Downloaders\\NltkCorporaIndexDownloader' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Downloaders/NltkCorporaIndexDownloader.php',
        'TextAnalysis\\Exceptions\\InvalidExpression' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Exceptions/InvalidExpression.php',
        'TextAnalysis\\Exceptions\\InvalidParameterSizeException' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Exceptions/InvalidParameterSizeException.php',
        'TextAnalysis\\Extracts\\DateExtract' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Extracts/DateExtract.php',
        'TextAnalysis\\Extracts\\EmailExtract' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Extracts/EmailExtract.php',
        'TextAnalysis\\Extracts\\HashTag' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Extracts/HashTag.php',
        'TextAnalysis\\Extracts\\LambdaExtract' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Extracts/LambdaExtract.php',
        'TextAnalysis\\Extracts\\UrlExtract' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Extracts/UrlExtract.php',
        'TextAnalysis\\Filters\\CharFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/CharFilter.php',
        'TextAnalysis\\Filters\\DomainFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/DomainFilter.php',
        'TextAnalysis\\Filters\\EmailFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/EmailFilter.php',
        'TextAnalysis\\Filters\\LambdaFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/LambdaFilter.php',
        'TextAnalysis\\Filters\\LowerCaseFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/LowerCaseFilter.php',
        'TextAnalysis\\Filters\\NumbersFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/NumbersFilter.php',
        'TextAnalysis\\Filters\\PossessiveNounFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/PossessiveNounFilter.php',
        'TextAnalysis\\Filters\\PunctuationFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/PunctuationFilter.php',
        'TextAnalysis\\Filters\\QuotesFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/QuotesFilter.php',
        'TextAnalysis\\Filters\\SpacePunctuationFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/SpacePunctuationFilter.php',
        'TextAnalysis\\Filters\\StopWordsFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/StopWordsFilter.php',
        'TextAnalysis\\Filters\\StripTagsFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/StripTagsFilter.php',
        'TextAnalysis\\Filters\\TrimFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/TrimFilter.php',
        'TextAnalysis\\Filters\\UpperCaseFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/UpperCaseFilter.php',
        'TextAnalysis\\Filters\\UrlFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/UrlFilter.php',
        'TextAnalysis\\Filters\\WhitespaceFilter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Filters/WhitespaceFilter.php',
        'TextAnalysis\\Generators\\StopwordGenerator' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Generators/StopwordGenerator.php',
        'TextAnalysis\\Indexes\\TfIdf' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Indexes/TfIdf.php',
        'TextAnalysis\\Indexes\\WordnetIndex' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Indexes/WordnetIndex.php',
        'TextAnalysis\\Interfaces\\IClassifier' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/IClassifier.php',
        'TextAnalysis\\Interfaces\\ICollection' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/ICollection.php',
        'TextAnalysis\\Interfaces\\IDataReader' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/IDataReader.php',
        'TextAnalysis\\Interfaces\\IDataWriter' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/IDataWriter.php',
        'TextAnalysis\\Interfaces\\IDistance' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/IDistance.php',
        'TextAnalysis\\Interfaces\\IExtractStrategy' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/IExtractStrategy.php',
        'TextAnalysis\\Interfaces\\ILexicalDiversity' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/ILexicalDiversity.php',
        'TextAnalysis\\Interfaces\\ISimilarity' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/ISimilarity.php',
        'TextAnalysis\\Interfaces\\ISpelling' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/ISpelling.php',
        'TextAnalysis\\Interfaces\\IStemmer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/IStemmer.php',
        'TextAnalysis\\Interfaces\\ITokenTransformation' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Interfaces/ITokenTransformation.php',
        'TextAnalysis\\LexicalDiversity\\Naive' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/LexicalDiversity/Naive.php',
        'TextAnalysis\\LexicalDiversity\\YuleI' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/LexicalDiversity/YuleI.php',
        'TextAnalysis\\LexicalDiversity\\YuleK' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/LexicalDiversity/YuleK.php',
        'TextAnalysis\\Models\\ScoreKeeper' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Models/ScoreKeeper.php',
        'TextAnalysis\\Models\\Wordnet\\ExceptionMap' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Models/Wordnet/ExceptionMap.php',
        'TextAnalysis\\Models\\Wordnet\\Lemma' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Models/Wordnet/Lemma.php',
        'TextAnalysis\\Models\\Wordnet\\Synset' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Models/Wordnet/Synset.php',
        'TextAnalysis\\NGrams\\NGramFactory' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/NGrams/NGramFactory.php',
        'TextAnalysis\\Sentiment\\Vader' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Sentiment/Vader.php',
        'TextAnalysis\\Stemmers\\DictionaryStemmer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Stemmers/DictionaryStemmer.php',
        'TextAnalysis\\Stemmers\\LambdaStemmer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Stemmers/LambdaStemmer.php',
        'TextAnalysis\\Stemmers\\LancasterStemmer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Stemmers/LancasterStemmer.php',
        'TextAnalysis\\Stemmers\\LookupStemmer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Stemmers/LookupStemmer.php',
        'TextAnalysis\\Stemmers\\MorphStemmer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Stemmers/MorphStemmer.php',
        'TextAnalysis\\Stemmers\\PorterStemmer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Stemmers/PorterStemmer.php',
        'TextAnalysis\\Stemmers\\RegexStemmer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Stemmers/RegexStemmer.php',
        'TextAnalysis\\Stemmers\\SnowballStemmer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Stemmers/SnowballStemmer.php',
        'TextAnalysis\\Taggers\\StanfordAbstract' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Taggers/StanfordAbstract.php',
        'TextAnalysis\\Taggers\\StanfordNerTagger' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Taggers/StanfordNerTagger.php',
        'TextAnalysis\\Taggers\\StanfordPosTagger' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Taggers/StanfordPosTagger.php',
        'TextAnalysis\\Tokenizers\\FixedLengthTokenizer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/FixedLengthTokenizer.php',
        'TextAnalysis\\Tokenizers\\GeneralTokenizer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/GeneralTokenizer.php',
        'TextAnalysis\\Tokenizers\\LambdaTokenizer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/LambdaTokenizer.php',
        'TextAnalysis\\Tokenizers\\PennTreeBankTokenizer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/PennTreeBankTokenizer.php',
        'TextAnalysis\\Tokenizers\\RegexTokenizer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/RegexTokenizer.php',
        'TextAnalysis\\Tokenizers\\SentenceTokenizer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/SentenceTokenizer.php',
        'TextAnalysis\\Tokenizers\\TokenizerAbstract' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/TokenizerAbstract.php',
        'TextAnalysis\\Tokenizers\\TwitterTokenizer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/TwitterTokenizer.php',
        'TextAnalysis\\Tokenizers\\VanderleeTokenizer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/VanderleeTokenizer.php',
        'TextAnalysis\\Tokenizers\\WhitespaceTokenizer' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Tokenizers/WhitespaceTokenizer.php',
        'TextAnalysis\\Traits\\WordnetPointerSymbolMap' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Traits/WordnetPointerSymbolMap.php',
        'TextAnalysis\\Utilities\\Nltk\\Download\\Package' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Utilities/Nltk/Download/Package.php',
        'TextAnalysis\\Utilities\\Text' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Utilities/Text.php',
        'TextAnalysis\\Utilities\\Vowels\\EnglishVowels' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Utilities/Vowels/EnglishVowels.php',
        'TextAnalysis\\Utilities\\Vowels\\VowelsAbstractFactory' => __DIR__ . '/..' . '/yooper/php-text-analysis/src/Utilities/Vowels/VowelsAbstractFactory.php',
        'Wamania\\Snowball\\Danish' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Danish.php',
        'Wamania\\Snowball\\Dutch' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Dutch.php',
        'Wamania\\Snowball\\English' => __DIR__ . '/..' . '/wamania/php-stemmer/src/English.php',
        'Wamania\\Snowball\\French' => __DIR__ . '/..' . '/wamania/php-stemmer/src/French.php',
        'Wamania\\Snowball\\German' => __DIR__ . '/..' . '/wamania/php-stemmer/src/German.php',
        'Wamania\\Snowball\\Italian' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Italian.php',
        'Wamania\\Snowball\\Norwegian' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Norwegian.php',
        'Wamania\\Snowball\\Portuguese' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Portuguese.php',
        'Wamania\\Snowball\\Romanian' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Romanian.php',
        'Wamania\\Snowball\\Russian' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Russian.php',
        'Wamania\\Snowball\\Spanish' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Spanish.php',
        'Wamania\\Snowball\\Stem' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Stem.php',
        'Wamania\\Snowball\\Stemmer' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Stemmer.php',
        'Wamania\\Snowball\\Swedish' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Swedish.php',
        'Wamania\\Snowball\\Utf8' => __DIR__ . '/..' . '/wamania/php-stemmer/src/Utf8.php',
        'Yooper\\Nicknames' => __DIR__ . '/..' . '/yooper/nicknames/src/Nicknames.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98f1cdc138a689084833ad18a5789c50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98f1cdc138a689084833ad18a5789c50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98f1cdc138a689084833ad18a5789c50::$classMap;

        }, null, ClassLoader::class);
    }
}