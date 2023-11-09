class CommentController < ApplicationController
    def all
        comments = Comment.all.paginate(page: params[:page])
        render json: comments
    end

    def show
        comment = Comment.find_by!(id: params[:id])
        render json: comment
    end

    def create
        comment = Comment.find_by!(id: params[:id])
        comment.create(comment_params)
    end

    def update
        comment = Comment.find_by!(id: params[:id])
        comment.update(comment_params)
    end

    def destroy
        comment = Comment.find_by!(id: params[:id])
        comment.destroy
    end

    private

    def comment_params
        params.require(:comment).permit(:user_id, :post_id, :content)
    end
end 