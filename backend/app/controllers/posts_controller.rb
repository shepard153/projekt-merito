class PostController < ApplicationController
    def all
        posts = Post.where(post_id: params[:post_id]).paginate(page: params[:page])
        render json: posts
    end

    def show
        post = Post.find_by!(id: params[:id])
        render json: post
    end

    def create
        post = Post.find_by!(id: params[:id])
        post.create(post_params)
    end

    def update
        post = Post.find_by!(id: params[:id])
        post.update(post_params)
    end

    def destroy
        post = Post.find_by!(id: params[:id])
        post.destroy
    end

    private

    def post_params
        params.require(:post).permit(:user_id, :title, :content)
    end
end