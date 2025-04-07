#[AsFrontendModule(category: 'user', template: 'mod_subscription')]
class SubscriptionController extends AbstractFrontendModuleController
{
    public function __construct(
        private LemonSqueezy $lemonSqueezy
    ) {}

    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        $user = FrontendUser::getInstance();
        $subscriptions = $this->lemonSqueezy->getSubscriptions($user->email);
        
        $template->subscriptions = $subscriptions;
        $template->manageUrl = $model->lemonSqueezyManageUrl;
        
        return $template->getResponse();
    }
}
