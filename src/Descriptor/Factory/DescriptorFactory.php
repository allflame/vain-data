<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/5/16
 * Time: 10:52 AM
 */

namespace Vain\Data\Descriptor\Factory;

use Vain\Data\Descriptor\Decorator\Filter\FilterDescriptorDecorator;
use Vain\Data\Descriptor\Decorator\FunctionX\FunctionDescriptorDecorator;
use Vain\Data\Descriptor\Decorator\Helper\HelperDescriptorDecorator;
use Vain\Data\Descriptor\Decorator\Mode\ModeDescriptorDecorator;
use Vain\Data\Descriptor\DescriptorInterface;
use Vain\Data\Descriptor\InPlace\InPlaceDescriptor;
use Vain\Data\Descriptor\Decorator\Method\MethodDescriptorDecorator;
use Vain\Data\Descriptor\Decorator\Property\PropertyDescriptorDecorator;
use Vain\Data\Descriptor\Local\LocalDescriptor;
use Vain\Data\Descriptor\Module\ModuleDescriptor;
use Vain\Data\Evaluator\EvaluatorInterface;
use Vain\Data\ExpressionInterface;
use Vain\Data\Module\Repository\ModuleRepositoryInterface;

class DescriptorFactory implements DescriptorFactoryInterface
{
    private $moduleRepository;

    private $evaluator;

    /**
     * DescriptorFactory constructor.
     * @param ModuleRepositoryInterface $moduleRepository
     * @param EvaluatorInterface $evaluator
     */
    public function __construct(ModuleRepositoryInterface $moduleRepository, EvaluatorInterface $evaluator)
    {
        $this->moduleRepository = $moduleRepository;
        $this->evaluator = $evaluator;
    }

    /**
     * @inheritDoc
     */
    public function inplace($value = null)
    {
        return new InPlaceDescriptor($value);
    }

    /**
     * @inheritDoc
     */
    public function module($module)
    {
        return new ModuleDescriptor($this->moduleRepository->getModule($module));
    }

    /**
     * @inheritDoc
     */
    public function method(DescriptorInterface $descriptor, $method, array $arguments = [])
    {
        return new MethodDescriptorDecorator($descriptor, $method, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function property(DescriptorInterface $descriptor, $property)
    {
        return new PropertyDescriptorDecorator($descriptor, $property);
    }

    /**
     * @inheritDoc
     */
    public function func(DescriptorInterface $descriptor, $functionName, array $arguments = [])
    {
        return new FunctionDescriptorDecorator($descriptor, $functionName, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function mode(DescriptorInterface $descriptor, $mode)
    {
        return new ModeDescriptorDecorator($descriptor, $mode);
    }

    /**
     * @inheritDoc
     */
    public function filter(DescriptorInterface $descriptor, ExpressionInterface $expression)
    {
        return new FilterDescriptorDecorator($descriptor, $this->evaluator, $expression);
    }

    /**
     * @inheritDoc
     */
    public function helper(DescriptorInterface $descriptor, $class, $method, array $arguments = [])
    {
        return new HelperDescriptorDecorator($descriptor, $class, $method, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function local()
    {
        return new LocalDescriptor();
    }
}