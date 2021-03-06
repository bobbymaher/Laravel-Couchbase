<?php

/**
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Ytake\LaravelCouchbase\Exceptions;

/**
 * Class FlushException.
 *
 * @author Yuuki Takezawa<yuuki.takezawa@comnect.jp.net>
 */
class FlushException extends \Exception
{
    /**
     * FlushException constructor.
     *
     * @param array           $message
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct(array $message, $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message['_'], $code, $previous);
    }
}
