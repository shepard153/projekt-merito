Rails.application.routes.draw do
  devise_for :users, defaults: {format: :json}
  # https://github.com/waiting-for-dev/devise-jwt/wiki/Configuring-devise-for-APIs
  # Define your application routes per the DSL in https://guides.rubyonrails.org/routing.html

  # Defines the root path route ("/")
  # root "articles#index"
end
