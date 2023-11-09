Rails.application.routes.draw do
  resources :users, param: :_username
  post '/auth/login', to: 'authentication#login'
  get '/*a', to: 'application#not_found' 
  # https://github.com/waiting-for-dev/devise-jwt/wiki/Configuring-devise-for-APIs
  # Define your application routes per the DSL in https://guides.rubyonrails.org/routing.html

  # Defines the root path route ("/")
  # root "articles#index"
  resource :posts do
    collection do 
      get :all
    end
  end
  resource :comments do 
    collection do 
      get :all
    end
  end
  
end
